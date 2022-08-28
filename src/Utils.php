if (!function_exists('is_valid')) {
    function is_valid($value, $regex) {
        return (!preg_match($regex, $value));
    }
}