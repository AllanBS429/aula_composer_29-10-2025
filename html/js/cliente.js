import { Validate } from "./Validate.js";

const InsertButton = document.getElementById('insert');

$('#cpf').inputmask({ "mask": ["999.999.999-99", "99.999.999/9999-99"] });
$('#tel').inputmask({ "mask": ["(99) 9999-9999", "(99) 99999-9999"] });


InsertButton.addEventListener('click', async () => {
    const IsValid = Validate
        .SetForm('form')
        .Valid();

});