const btn = document.getElementById("themeToggle");
const html = document.documentElement;

let saved = localStorage.getItem("theme") || "light";

html.setAttribute("data-theme", saved);
btn.textContent = saved === "dark" ? "Light" : "Dark";

btn.addEventListener("click", () => {
    let current = html.getAttribute("data-theme");

    if (current === "dark") {
        html.setAttribute("data-theme", "light");
        localStorage.setItem("theme", "light");
        btn.textContent = "Dark";
    } else {
        html.setAttribute("data-theme", "dark");
        localStorage.setItem("theme", "dark");
        btn.textContent = "Light";
    }
});
