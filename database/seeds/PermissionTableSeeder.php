<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permisos sobre modulos de usuarios
        Permission::create([
            'name' => 'usuarios.index',
            'category' => 'Usuarios',
            'display'=>'Acceso a Usuarios'
            ]);
        Permission::create([
            'name' => 'usuarios.edit',
            'category' => 'Usuarios',
            'display'=>'Editar Usuarios'
            ]);
        Permission::create([
            'name' => 'usuarios.show',
            'category' => 'Usuarios',
            'display'=>'Consultar Usuarios'
            ]);
        Permission::create([
            'name' => 'usuarios.create',
            'category' => 'Usuarios',
            'display'=>'Crear Usuarios'
            ]);
        Permission::create([
             'name' => 'usuarios.update',
            'category' => 'Usuarios',
              'display'=>'Actualizar Usuarios'
              ]);
        Permission::create([
            'name' => 'usuarios.destroy',
            'category' => 'Usuarios',
            'display'=>'Eliminar Usuarios'
            ]);
        // Permisos sobre modulos de roles
        Permission::create([
            'name' => 'roles.index',
            'category' => 'Roles',
            'display'=>'Acceder a Roles'
            ]);
        Permission::create([
            'name' => 'roles.edit',
            'category' => 'Roles',
            'display'=>'Editar Roles'
            ]);
        Permission::create([
            'name' => 'roles.show',
            'category' => 'Roles',
            'display'=>'Consultar Roles'
            ]);
        Permission::create([
            'name' => 'roles.create',
            'category' => 'Roles',
            'display'=>'Crear Roles'
            ]);
        Permission::create([
            'name' => 'roles.update',
            'category' => 'Roles',
            'display'=>'Actualizar Roles'
            ]);
        Permission::create([
            'name' => 'roles.destroy',
            'category' => 'Roles',
            'display'=>'Eliminar Roles'
            ]);
        // Permisos sobre modulos de Compresor
        Permission::create([
            'name' => 'compresor.index',
            'category' => 'Compresor',
            'display'=>'Acceso reporte de Compresor'
            ]);
        Permission::create([
            'name' => 'compresor.edit',
            'category' => 'Compresor',
            'display'=>'Editar reporte de Compresor'
            ]);
        Permission::create([
            'name' => 'compresor.show',
            'category' => 'Compresor',
            'display'=>'Consultar reporte de Compresor'
            ]);
        Permission::create([
            'name' => 'compresor.create',
            'category' => 'Compresor',
            'display'=>'Crear reporte de Compresor'
            ]);
        Permission::create([
              'name' => 'compresor.update',
               'category' => 'Compresor',
              'display'=>'Actualizar reporte de Compresor'
              ]);
        Permission::create([
            'name' => 'compresor.destroy',
            'category' => 'Compresor',
            'display'=>'Eliminar reporte de Compresor'
            ]);
        Permission::create([
            'name' => 'compresor.pdf',
            'category' => 'Compresor',
            'display'=>'Crear pdf de reporte Compresor'
            ]);

        // Permisos sobre modulos de desechos
        Permission::create([
            'name' => 'desechos.index',
            'category' => 'Desechos',
            'display'=>'Acceso reporte de Desechos'
            ]);
        Permission::create([
            'name' => 'desechos.edit',
            'category' => 'Desechos',
            'display'=>'Editar reporte de Desechos'
            ]);
        Permission::create([
            'name' => 'desechos.show',
            'category' => 'Desechos',
            'display'=>'Consultar reporte de Desechos'
            ]);
        Permission::create([
            'name' => 'desechos.create',
            'category' => 'Desechos',
            'display'=>'Crear reporte de Desechos'
            ]);
        Permission::create([
            'name' => 'desechos.update',
            'category' => 'Desechos',
            'display'=>'Actualizar reporte de Desechos'
            ]);
        Permission::create([
            'name' => 'desechos.destroy',
            'category' => 'Desechos',
            'display'=>'Eliminar reporte de Desechos'
            ]);
         Permission::create([
            'name' => 'desechos.pdf',
            'category' => 'Desechos',
            'display'=>'Crear pdf de reporte Desechos'
            ]);
        // Permisos sobre modulos de agua
        Permission::create([
            'name' => 'agua.index',
            'category' => 'Agua',
            'display'=>'Acceso reporte de Agua'
            ]);
        Permission::create([
            'name' => 'agua.edit',
            'category' => 'Agua',
            'display'=>'Editar reporte de Agua'
            ]);
        Permission::create([
            'name' => 'agua.show',
            'category' => 'Agua',
            'display'=>'Consultar reporte de Agua'
            ]);
        Permission::create([
            'name' => 'agua.create',
            'category' => 'Agua',
            'display'=>'Crear reporte de Agua'
            ]);
        Permission::create([
            'name' => 'agua.update',
            'category' => 'Agua',
            'display'=>'Actualizar reporte de Agua'
            ]);
        Permission::create([
            'name' => 'agua.destroy',
            'category' => 'Agua',
            'display'=>'Eliminar reporte de Agua'
            ]);
        Permission::create([
            'name' => 'agua.pdf',
            'category' => 'Agua',
            'display'=>'Crear pdf de reporte Agua'
            ]);
            
        // Permisos sobre modulos de reportes
        // Permission::create(['name' => 'reportes.index']);
        // Permission::create(['name' => 'reportes.edit']);
        // Permission::create(['name' => 'reportes.store']);
        // Permission::create(['name' => 'reportes.show']);
        // Permission::create(['name' => 'reportes.create']);
        // Permission::create(['name' => 'reportes.destroy']);

        $admin = Role::create(['name' => 'Admin','description' => 'Rol de Administrador']);
        $admin->givePermissionTo(Permission::all());
        // $admin->givePermissionTo([
        //     'usuarios.index',
        //     'usuarios.edit',
        //     'usuarios.create',
        //     'usuarios.destroy',
        //     'roles.edit'
        // ]);
    }
}
