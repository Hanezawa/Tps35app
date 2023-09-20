class Orden{
    constructor(){
        
        
    }
}

class Producto{
    static contadorProductos = 0;
    constructor(idProducto,nombre,precio){
        this._idProducto = idProducto;
        this._nombre = nombre;
        this._precio = precio;
        this._contadorProductos = ++Producto.contadorProductos;
    }
        Producto(){
            
    }

    get idProducto(){
        return this._idProducto;
    }
    get Nombre(){
        return this._nombre;
    }
    set Nombre(nombre){
        this._nombre = nombre
    }
    get Precio(){
        return this._precio;
    }
    set Precio(precio){
        this._precio = precio;  
    }
}