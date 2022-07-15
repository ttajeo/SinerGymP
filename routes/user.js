
const { Router }= require('express');
const {usuariosGet, usuariosDelete, usuariosPost, usuariosPut}= require('../controllers/usuarios');

const router= Router();


router.get('/', usuariosGet);
router.post('/:id', usuariosPost);
router.put('/:id', usuariosPut);
router.delete('/', usuariosDelete);

module.exports = router;