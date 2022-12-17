rol-permission

1-config/app.php

providers: Spatie\Permission\PermissionServiceProvider::class,


2- publish

php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"



3- migrate


4- define roles in roles table : Admin , Helper

5- define permissions in permissions table: user-all, user-create

6- define each "user" can have which "role" in model_has_roles table

7- define each "role" can have which permissions in role_has_permissions table

8- these are necessary in user model =>  use HasFactory, Notifiable, HasRoles;
