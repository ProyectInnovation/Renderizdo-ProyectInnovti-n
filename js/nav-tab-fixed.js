import { resaltaSiEstasEn } from "../lib/js/resaltaSiEstasEn.js"

export class NavTabFixed extends HTMLElement {

  connectedCallback() {
    this.classList.add("md-tab", "fixed")

    this.innerHTML = /* HTML */`

   <a ${resaltaSiEstasEn(["/index.html", "", "/"])} href="index.html">
    <span class="material-symbols-outlined">home</span>
    Inicio
   </a>
   
   <a ${resaltaSiEstasEn(["/chistes.html"])} href="chistes.html">
        <span class="material-symbols-outlined">emoji_emotions</span>
        Chistes
      </a>

      <a ${resaltaSiEstasEn(["/servidor.html"])} href="servidor.html">
  <span class="material-symbols-outlined">dns</span>
  Servidor
</a>


      <a ${resaltaSiEstasEn(["/ayuda.html"])} href="ayuda.html">
        <span class="material-symbols-outlined">help</span>
        Ayuda
      </a>
    `
  }

}

customElements.define("nav-tab-fixed", NavTabFixed)