



CREATE TABLE datos_contratacion (
     nombre varchar(255),
      email varchar(255), 
      codigo_postal varchar(255), 
      dni int, 
      tipo_vehiculo ENUM('coche', 'moto'),
    antiguedad_carnet ENUM('si', 'no'),
     multipropietario Enum('si', 'no'),
     valor_vehiculo int,
     plazos_pago int
     aceptado  boolean

)



