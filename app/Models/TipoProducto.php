<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $table 	  = 'tipo_producto';
	protected $primaryKey = 'id_tipo_producto';
	
	const 	  CREATED_AT  = 'fe_creado';
    const 	  UPDATED_AT  = 'fe_actualizado';
    
    protected $fillable   = [
                            'tipo_producto',
                            'id_status',
                            'id_usuario',
                            'fe_creado',
                            'fe_actualizado'
                            ]; 
    
    protected $hidden     = ['fe_creado','fe_actualizado'];
   
    public function producto(){
    
        return $this->HasMany('App\Models\Producto', 'id_tipo_producto');
    
    }
}
