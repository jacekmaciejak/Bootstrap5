
const projects = document.querySelector('.projects')
// const allPopoversHeaders = [...document.querySelectorAll('.popover-header')]
const imgHeader = document.querySelector('.page-header img')
const tl = gsap.timeline({ defaults: { ease: 'power1.out' } })

//Add gradient class to title in section project
const projectsH5 = projects.querySelectorAll('h5')
projectsH5.forEach(project => {
    project.classList.add('gradient--green')
})
//Add icon hover class to div in section project
const projectsWrappers = projects.querySelectorAll('.col')
projectsWrappers.forEach(wrapper => {
    wrapper.classList.add('icon--hover')
})
//Add to <a> some new style in section project
const aTag = projects.querySelectorAll('a')
aTag.forEach(item => {
    item.style.position = 'relative';
    item.style.zIndex = '3'
})

//Add popover to technology section

const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
const popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
})
const popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
    trigger: 'focus'
})




