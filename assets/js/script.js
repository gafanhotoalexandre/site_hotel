function researcher()
{

    // criar form de pesquisa
    let form = document.createElement('form')
    form.action = 'hotel_guests.php?search='
    form.method = 'POST'
    form.className = 'row'

    // criar div input-group-append
    let parentDiv = document.createElement('div')
    parentDiv.className = 'input-group'
    // criar input para entrada do texto
    let input = document.createElement('input')
    input.type = 'text'
    input.name = 'searchFor'
    input.className = 'form-control'

    // criar div input-group-append
    let appendDiv = document.createElement('div')
    appendDiv.className = 'input-group-append'
    // criar button para envio do form
    let btn = document.createElement('button')
    btn.type = 'submit'
    btn.className = 'btn btn-outline-info'
    btn.innerHTML = 'Pesquisar'

    /* ADICIONAR ELEMENTOS NA PÁGINA */
    // incluir input na div mãe
    parentDiv.appendChild(input)
    // incluir button na div 'agregradora'
    appendDiv.appendChild(btn)
    // incluir divagregada na div mãe
    parentDiv.appendChild(appendDiv)
    // incluir div mãe no form
    form.appendChild(parentDiv)

    // selecionar a div task
    let search = document.querySelector('#search')
    // modificar css
    search.classList.remove('bg-info')
    // limpar o conteúdo interno do li
    search.innerHTML = ''
    // incluir form de pesquisa na página
    search.insertBefore(form, search[0])
}
