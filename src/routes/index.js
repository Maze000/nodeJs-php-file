const express = require('express');
const router = express.Router();

router.get('/', (req, res) => {
  res.render('index', { title: 'nodejs server php' });
});

module.exports = router;
