<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Tenant;

class ValidTenantSlug implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if slug is available
        if (Tenant::where('slug', $value)->exists()) {
            return false;
        }

        // Check if slug matches allowed pattern
        return preg_match('/^[a-z0-9-]+$/', $value) && !preg_match('/^-|-$/', $value);
    }

    public function message()
    {
        return 'The :attribute is invalid or already taken.';
    }
}