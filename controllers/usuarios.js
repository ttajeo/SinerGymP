const {response}= require('express');
const usuariosGet= (req , res = response)=>{    //Crear o ingresar usuarios datos
    res.json({
        msg:'get API - Registrar usuarios',
        
    });
}
const usuariosPost= (req , res = response)=>{ 
       const  body = req.body;
    res.json({
        msg: 'POST API',
        body

    });
}
const usuariosPut= (req, res = response)=>{   //Actualizar datos de usuarios
    res.json({
        msg:'Put API - UsuariosPut',
        
    });
}
const usuariosDelete= (req, res = response)=>{     //Eliminar usuarios y sus datos
    res.json({
        msg:'Delete API - UsuariosDelete'
    });
}

const usuariosPatch= (req, res = response) =>{
    res.json({
        msg: 'Patch API - UsuariosPatch '
    });
};


module.exports={
    usuariosGet,
    usuariosDelete,
    usuariosPost,
    usuariosPut,
    usuariosPatch
}