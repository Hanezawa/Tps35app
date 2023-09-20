class Personas{
    static contadorPersonas = 0;

    constructor(nombre, apellido,edad){
        this._idPersona = ++Personas.contadorPersonas;
        this._nombre = nombre;
        this.apellido = apellido;
        this._edad = edad;
        
    }
    get idPersona(){
        return this._idPersona;
    }
    get nombre(){
        return this._nombre;
    }
    set nombre(nombre){
        this._nombre = nombre;
    }
    get apellido(){
        return this._apellido;
    }
    set apellido(apellido){
        this._apellido = apellido;
    }
    get edad(){
        return this._edad;
    }
    set edad(edad){
        this._edad = edad;
    }

    agruparDatos(){
        return "la persona con ID: "+this.idPersona +" , llamada: "+this._nombre+' '+this._apellido+ ", Tiene una edad de: "+this.edad+" años.";
    }

    toString(){
        return this.agruparDatos();
    }
    
}
class Empleado extends Personas{
    constructor(nombre,apellido,edad,idEmpleado,sueldo){
        super(nombre,apellido,edad)
        this._idEmpleado = idEmpleado;
        this._sueldo = sueldo;
    }

    get idEmpleado(){
        return this._idEmpleado;
    }
    get sueldo(){
        return this._sueldo;
    }
    set sueldo(sueldo){
        this._sueldo = sueldo;
    }
    agruparDatos(){
        return super.agruparDatos()+" Identificado con la ID de empleado: "+this.idEmpleado+" Recibe un sueldo de: "+this.sueldo;
    }
    toString(){
        return this.agruparDatos();
    }
}

class Cliente extends Personas{
    constructor(nombre,apellido,edad,idCliente,fechaRegistro){
        super(nombre,apellido,edad)
        this._idCliente = idCliente;
        this._fechaRegistro = fechaRegistro;
    }
    
    get idCliente(){
        return this._idCliente;
    }
    get fechaRegistro(){
        return this._fechaRegistro;
    }
    set fechaRegistro(fechaRegistro){
        this._fechaRegistro = fechaRegistro;
    }
    agruparDatos(){
        return super.agruparDatos()+" Identificado con la ID de cliente: "+this.idCliente+" Se registro el: "+this.fechaRegistro;
    }
    toString(){
        return this.agruparDatos();
    }


}

let persona1 = new Personas("Nathan","Gama", 23);
let empleado1 = new Empleado("Eyner","Acosta", 18, 1010, 1160000);
let cliente1 = new Cliente("Maria","De la Rosa",17, 2678,"25 de agosto del 2023");

console.log(persona1.toString());
console.log(empleado1.toString());
console.log(cliente1.toString());

empleado1.apellido = "Hernandez";
console.log(empleado1.toString());
cliente1.fechaRegistro = new Date();
console.log(cliente1.toString())
