<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * @class Person
 * @brief Datos de la persona
 *
 * Gestiona el modelo de datos de las personas
 *
 *
 * @copyright <a href='http://www.gnu.org/licenses/gpl-3.0.html'>GNU Public License versión 3 (GPLv3)</a>
 */
class Person extends Model
{
    /**
     * Lista de atributos que pueden ser asignados masivamente
     *
     * @var array $fillable
     */
    protected $fillable = [
        'first_name', 'last_name', 'identification_card', 'phone', 'email', 'user_id'
    ];
    /**
     * Método que obtiene el Usuario que tiene asociado una persona
     *
     * 
     * @return object Objeto con los registros relacionados al modelo User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
