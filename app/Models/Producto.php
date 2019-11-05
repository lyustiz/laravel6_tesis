<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table 	  = 'producto';
	protected $primaryKey = 'id_producto';
	
	const 	  CREATED_AT  = 'fe_creado';
    const 	  UPDATED_AT  = 'fe_actualizado';
    
    protected $fillable   = [
                            'id_tipo_producto',
                            'id_status',
                            'id_usuario',
                            'fe_creado',
                            'fe_actualizado'
                            ]; 
    
    protected $hidden     = ['fe_creado','fe_actualizado'];
   
    
    
    public function tipoProducto(){
    
        return $this->BelongsTo('App\Models\TipoProducto', 'id_tipo_producto');
    
    }

  /*  public function usuario(){
    
        return $this->BelongsTo('App\Models\Usuario', 'id_usuario');
    
    }*/
   
}
