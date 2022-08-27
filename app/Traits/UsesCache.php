<?php


namespace App\Traits;


use Closure;
use DateInterval;
use DateTimeInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;


trait UsesCache
{
    /**
     * @var string
     */
    private string $cacheKey = 'default_key';

    /**
     * @var int
     */
    protected int $hours = 24;

    /**
     * @var int
     */
    protected int $minutes = 60;

    /**
     * @param string $key
     * @return string
     */
    private function getCacheKey(string $key): string
    {
        return $this->isPrefixSet()
            ? "{$this->cacheKey}:{$key}"
            : "{$this->defaultUniquePrefix()}:{$key}";
    }

    /**
     * @param int $hours
     */
    final protected function setDefaultCacheHours(int $hours): void
    {
        $this->hours = $hours;
    }

    /**
     * @param int $minutes
     */
    final protected function setDefaultCacheMinutes(int $minutes): void
    {
        $this->minutes = $minutes;
    }

    /**
     * @return string
     */
    private function defaultUniquePrefix(): string
    {
        $key = str_replace('\\', '-', self::class);
        return Str::slug($key);
    }

    /**
     * @param string $prefix
     */
    final protected function setCachePrefix(string $prefix): void
    {
        $this->cacheKey = $prefix;
    }

    /**
     * @return bool
     */
    private function isPrefixSet(): bool
    {
        return $this->cacheKey !== 'default_key';
    }

    /**
     * @return Collection
     */
    final protected function getCacheKeys(): Collection
    {
        $key = $this->getCacheKey('keys');
        return $this->cacheGet($key, collect([]));
    }

    /**
     * @param string $key
     */
    final protected function updateCacheKeys(string $key): void
    {
        $keys = $this->getCacheKeys();
        if(!$keys->contains($key)) {
            $keys->push($key);
            Cache::put($this->getCacheKey('keys'), $keys);
        }
    }

    /**
     * @param string $key
     * @param DateTimeInterface|DateInterval|int $ttl
     * @param Closure $closure
     * @return mixed
     */
    final protected function remember(string $key, $ttl, Closure $closure): mixed
    {
        $cache_key = $this->getCacheKey($key);
        $this->updateCacheKeys($cache_key);
        return Cache::remember($cache_key, $ttl, $closure);
    }

    /**
     * @param string $key
     * @param Closure $closure
     * @return mixed
     */
    final protected function cacheDefaultMinutes(string $key, Closure $closure): mixed
    {
        return $this->remember($key, now()->addMinutes($this->minutes), $closure);
    }

    /**
     * @param string $key
     * @param Closure $closure
     * @return mixed
     */
    final protected function cacheDefaultHours(string $key, Closure $closure): mixed
    {
        return $this->remember($key, now()->addHours($this->hours), $closure);
    }

    /**
     * @param string $key
     * @param Closure $closure
     * @return mixed
     */
    final protected function rememberForever(string $key, Closure $closure): mixed
    {
        $cache_key = $this->getCacheKey($key);
        $this->updateCacheKeys($cache_key);
        return Cache::rememberForever($cache_key, $closure);
    }

    /**
     * @param string $key
     * @param DateTimeInterface|DateInterval|int $time
     * @param mixed $value
     * @return bool
     */
    final protected function cachePut(string $key, $time, mixed $value): bool
    {
        $cache_key = $this->getCacheKey($key);
        $this->updateCacheKeys($cache_key);
        return Cache::put($cache_key, $value, $time);
    }

    /**
     * @param string $key
     * @param mixed|null $default
     * @return mixed
     */
    final protected function cacheGet(string $key, mixed $default = null): mixed
    {
        return Cache::get($key, $default);
    }

    /**
     * Clears the cache of the class using this trait
     * (only ones with saved/updated keys)
     */
    final protected function clearCache(): void
    {
        $keys = $this->getCacheKeys();
        foreach ($keys as $key) {
            Cache::forget($key);
        }
    }

    /**
     * Clears the cache whose key contains the $group key words
     * @param string $group
     */
    final protected function clearGroupCache(string $group): void
    {
        $keys = $this->getCacheKeys();

        foreach ($keys as $key) {
            if(str_contains($key, "$group")) Cache::forget($key);
        }
    }

    /**
     * @param string $key
     */
    private function cacheForget(string $key): void
    {
        Cache::forget($this->getCacheKey($key));
    }
}
