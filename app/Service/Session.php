<?php

namespace App\Service;

class Session
{
    /**
     * Save a key/value data in the session.
     */
    public static function save(string $key, string $value)
    {
        return $_SESSION[$key] = $value;
    }

    /**
     * Delete the value of a specific key of the session.
     */
    public static function delete(string $key): bool
    {
        if (self::exists($key)) {
            unset($_SESSION[$key]);
            return true;
        }
        return false;
    }

    /**
     * Checks if a specific key of a session exists.
     */
    public static function exists(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    /**
     * Get the value of a specific key of the session if it exists.
     */
    public static function get(string $key)
    {
        if (self::exists($key)) {
            return self::exists($key);
        }
    }

    /**
     * Starts the session.
     */
    public static function start()
    {
        session_start();
    }

    /**
     * Destroy the session.
     */
    public static function destroy()
    {
        session_destroy();
    }
}
