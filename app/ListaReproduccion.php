<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaReproduccion extends Model
{
    protected $table = "playlist";
    protected $primaryKey = "PlaylistId";
    public $timestamps = false;

    //RELACION DE M:M LISTA DE REPRODUCCION Y CANCIONES
    public function canciones(){
        //belongsToMany(muchos a muchos con pivote);
        //parametros:  1. El modelo a relacionar
        //             2. la tabla pivote
        //             3. FK del modelo actual del pivote
        //             4. FK del modelo a relacionar del pivote

        return $this->belongsToMany('App\Cancion',
                             'playlisttrack',
                             'PlaylistId',
                             'TrackId'
                             );
    }
}
