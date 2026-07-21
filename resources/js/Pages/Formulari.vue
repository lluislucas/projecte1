<script setup>






</script>

<template>
    <div class="title-container">
        <img class="logo" src="/imatges/logo.webp" alt="Logo Falguera Homes" />
        <h1>Registre hostes apartaments</h1>
    </div>

    

    <form action="">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" placeholder=" Introdueix el seu nom">

        <label for="cognom">Cognoms:</label>
        <input type="text" id="cognom" placeholder=" Introdueix els seus cognoms">

        <label for="naixament">Data naixament:</label>
        <input type="date" id="naixament">

        <label for="nom">Tipus Document:</label>
        <select id="documents">
            <option value="dni">DNI</option>
            <option value="passaport">Passaport</option>
            <option value="carnetconduir">Carnet Conduir</option>
        </select>


        <label for="numDocument">Numero document</label>
        <input type="text" id="numDocument" placeholder=" Introdueix el numero">

        <label for="numSuport">Numero de suport</label>
        <input type="text" id="numSuport" placeholder=" Introdueix el numero de suport">

        <label for="nom">Sexe</label>
        <select id="sexe">
            <option value="masculi">Masculi</option>
            <option value="femeni">Femeni</option>
            <option value="altre">Altre</option>
        </select>

        <label for="correu">Email</label>
        <input type="text" id="correu" placeholder=" Introdueixi el seu correu electronic">

        <label for="tel">Telefon</label>
        <input type="text" id="tel" placeholder=" Introdueixi el seu numero de telefon">

        <label for="direccio">Adressa</label>
        <input type="text" id="direccio" placeholder=" Introdueix el carrer i numero del seu habitatge">

        <label for="ciutat">Ciutat</label>
        <input type="text" id="ciutat" placeholder=" Introdueix la seva localitat">

        <label for="codipostal">Codi Postal</label>
        <input type="text" id="nom" codipostal=" Introdueix el codi postal" />

        <label for="pais">Pais</label>
        <input type="text" id="pais" placeholder=" pais">


        <label for="arxiu">Fotografia</label>
        <input type="file" id="arxiu" placeholder=" pais" accept="image/*, .pdf" />



        <label Accepto les condicions></label>
        <input type="checkbox">

        <button>enviar</button>
    </form>


</template>

<style scoped>
h1 {
    text-align: center;
    color: #2c3e50;
    font-size: 35px;
    font-weight: 700;
    line-height: 1;

}

input,label,select,button{
    display: block;
    width: 100%;
    margin-bottom: 10px;

}

.logo{
 width: 50px;
 height: 50px;

}

.title-container {
    
    background-color: red;
    display: flex;
    align-items: center;

    height:100px;
}

select{width: fit-content;}
</style>
