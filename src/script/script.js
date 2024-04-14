var boll1 = document.querySelector("#boll1")
var boll2 = document.querySelector("#boll2")
var boll3 = document.querySelector("#boll3")

var bolalsspawn = document.querySelector("#bolas-spawn")
var bolls = document.querySelector(".boll")
var temponumero = document.querySelector("#tempo-numero")
var pontosnumero = document.querySelector("#pontos-numero")
var telafinal = document.querySelector("#tela-final")
var jogo = document.querySelector("#jogo")
var pontosnumeroevenviar = document.querySelector("#pontos-numero-evenviar")



let tempocontador = 30
function tempo(){
    if(tempocontador >= 0){
        temponumero.innerHTML = `${tempocontador}s`
        tempocontador = tempocontador - 1
    }else{
        tempoAcabou()
        jogo.style.display = "none"
    }
}
setInterval(tempo, 1000)

let pontocontador = 0
boll1.addEventListener("click", () => {
    almentarPontos()
})
boll2.addEventListener("click", () => {
    almentarPontos()
})
boll3.addEventListener("click", () => {
    almentarPontos()
})

function almentarPontos(){
    pontocontador = pontocontador + 1
    pontosnumero.innerHTML = `${pontocontador} pontos`
}

boll1.addEventListener("click", () =>{
    let novaPosicaoTop = Math.random() * (bolalsspawn.clientHeight - 100)
    let novaPosicaoLeft = Math.random() * (bolalsspawn.clientWidth - 100)

    boll1.style.top = novaPosicaoTop + "px"
    boll1.style.left = novaPosicaoLeft + "px"
})

boll2.addEventListener("click", () =>{
    let novaPosicaoTop = Math.random() * (bolalsspawn.clientHeight - 100)
    let novaPosicaoLeft = Math.random() * (bolalsspawn.clientWidth - 100)

    boll2.style.top = novaPosicaoTop + "px"
    boll2.style.left = novaPosicaoLeft + "px"
})

boll3.addEventListener("click", () =>{
    let novaPosicaoTop = Math.random() * (bolalsspawn.clientHeight - 100)
    let novaPosicaoLeft = Math.random() * (bolalsspawn.clientWidth - 100)

    boll3.style.top = novaPosicaoTop + "px"
    boll3.style.left = novaPosicaoLeft + "px"
})

function posicaoAleatoria() {
    const numBolls = 3
    for (let i = 1; i <= numBolls; i++) {
        let boll = document.getElementById("boll" + i)

        let novaPosicaoTop = Math.random() * (bolalsspawn.clientHeight - 100)
        let novaPosicaoLeft = Math.random() * (bolalsspawn.clientWidth - 100)

        boll.style.top = novaPosicaoTop + "px"
        boll.style.left = novaPosicaoLeft + "px"
    }
}

function tempoAcabou() {
    telafinal.style.display = "block"
    pontosnumeroevenviar.value = pontocontador
}


