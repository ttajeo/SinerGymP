const {response, request}= require('express');


const usuariosGet= (req = request, res = response)=>{    

    const {run, nombre='no name',apellidoP='no name', apellidoM='no name',apikey, page='1',limit}= req.query;
    res.json({
        msg:'get API - registrar usuarios',
        run,
        nombre,
        apellidoP,
        apellidoM,
        apikey,
        page,
        limit
    });
}
const usuariosPost= (req, res = response)=>{    


    const {nombre, run}= req.body;


    res.json({
        msg:'Post API - UsuariosPost',
        nombre,
        run
    });
}
const usuariosPut= (req, res = response)=>{   

    const {id}= req.params;
    res.json({
        msg:'Put API - UsuariosPut',
        id
    });
}
const usuariosDelete= (req, res = response)=>{    
    res.json({
        msg:'Delete API - UsuariosDelete'
    });
}



module.exports={
    usuariosGet,
    usuariosDelete,
    usuariosPost,
    usuariosPut
}