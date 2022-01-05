console.log("Script Running.....");

document.querySelector('.close').style.display = 'none';
document.querySelector('.menus').addEventListener("click", () => {
    document.querySelector('.sidebar').classList.toggle('sidebar-hide');
    if (document.querySelector('.sidebar').classList.contains('sidebar-hide')) {
        document.querySelector('.menu').style.display = 'inline';
        document.querySelector('.close').style.display = 'none';
    }
    else {
        document.querySelector('.menu').style.display = 'none';
        setTimeout(() => {
            document.querySelector('.close').style.display = 'inline';
        }, 350);
    }
})