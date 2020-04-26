const smartgrid = require('smart-grid');

const settings = {
    columns: 12,
    offset: '60px',//растояние между колонками
    container: {
        maxWidth: '1280px',
        fields: '95px' // поля сайта
    },
    oldSizeStyle: false
};

smartgrid('./src/precss', settings);