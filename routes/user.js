
const { Router }= require('express');
const { check } = require('express-validator');
const {validarCampos, existepersonaId}= require('../middlewares/validar-campo');
const {usuariosGet, usuariosDelete, usuariosPost }= require('../controllers/usuarios');
const router= Router();
router.get('/', usuariosGet);
router.post('/',[
    check('rut','El Rut es obligatorio').not().isEmpty(),
    check('correo','El correo no es válido').isEmail(),
    check('password','La contraseña  debe tener 8 digitos').isLength(),
    validarCampos
], usuariosPost);

router.delete('/:id',[
    check('id', 'No es un ID  válido').isMongoId(),
    check('id').custom(existepersonaId),
    validarCampos
], usuariosDelete);



module.exports = router;