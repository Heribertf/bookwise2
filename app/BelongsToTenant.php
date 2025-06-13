<?php
// Create a trait to easily apply the tenant scope to models:

namespace App;

use App\Models\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Model;

trait BelongsToTenant
{
    /**
     * Boot the trait for a model.
     */
    protected static function bootBelongsToTenant(): void
    {
        static::addGlobalScope(new TenantScope);

        // Automatically assign tenant ID when creating a model
        static::creating(function (Model $model) {
            if (!$model->getAttribute('tenant_id') && config()->has('tenant_id')) {
                $model->setAttribute('tenant_id', config('tenant_id'));
            }
        });
    }

    /**
     * Get the tenant that the model belongs to.
     */
    public function tenant()
    {
        return $this->belongsTo(\App\Models\Tenant::class);
    }
}
