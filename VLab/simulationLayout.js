var sidebar = document.getElementById('sidebar')
var expHeader = document.getElementsByClassName('exp-header')[0]
var gridContainer = document.getElementsByClassName('container-grid')[0]
var outerBlock = document.getElementsByClassName('outer-block')[0]
var simulationSpace = document.getElementsByClassName('simulation')[0]
var header = document.getElementsByTagName('header')[0]
var btnFull = document.getElementsByClassName('btn-class')[0]
var button = document.getElementsByTagName('button')[0]
var expHead = document.querySelector('.exp-head')
var heading = document.querySelector('.hidden-head')
var body = document.getElementsByTagName('body')[0]
// var credits = document.getElementById('credits')


isFullScreen = false

function setSimulationFullScreen(title) {
    if (isFullScreen) {
        sidebar.style.display = "block"

        expHeader.style.display = "block"

        gridContainer.style.margin = "0% 0% 0% 10%"
        gridContainer.style.display = "inline-block"
        gridContainer.style.width = "80%"

        outerBlock.style.margin = "2% 0% 0% 3%"
        outerBlock.style.width = ""
        outerBlock.style.display = "block"

        header.style.display = "block"

        button.innerHTML = "Set Full Screen"

        btnFull.style.marginRight = "0%"

        expHead.style.display = "none"

        simulationSpace.style.width = "100%"
        simulationSpace.style.marginLeft = "5%"

        body.style.paddingTop = "4%"

        isFullScreen = false

        credits.style.marginRight = "0%"

        return

    }

    sidebar.style.display = "none"

    expHeader.style.display = "none"

    gridContainer.style.margin = "0% 0% 0% 0%"
    gridContainer.style.padding = "0% 0% 0% 0%"
    gridContainer.style.display = "inline-block"
    gridContainer.style.width = "100%"

    outerBlock.style.margin = "0% 0% 0% 0%"
    outerBlock.style.width = "100%"
    outerBlock.style.display = "inline-flex"
    outerBlock.style.justifyContent = "center"

    header.style.display = "none"

    button.innerHTML = "Resume Screen"

    btnFull.style.marginRight = "5%"

    // expHead.innerHTML = "Wedge Shaped Thin Film"
    expHead.style.display = "flex"
    expHead.style.justifyContent = "center"
    expHead.style.width = "75%"

    heading.innerHTML = title;

    simulationSpace.style.width = "100%"
    simulationSpace.style.marginLeft = "0%"

    body.style.paddingTop = "2%"

    // credits.style.marginRight = "5%"

    isFullScreen = true

}
