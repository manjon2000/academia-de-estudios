window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});

document.addEventListener("DOMContentLoaded", () => {
  let openMenu = document.getElementById("open-menu");
  let menuMobile = document.querySelector(".navbar-menu-mobile");
  let openSubmenu = document.querySelectorAll(".open-submenu");
  let openSubmenuDesktop = document.querySelectorAll(".desktop-menu-link");
  let arrowOpenSubmenu = document.querySelectorAll(".arrow-down");
  let divInfoUser = document.querySelector(".user-name-desktop");
  let containerInfoUser = document.querySelector(".modal-info-user-desktop");
  let listItemInfoUser = document.querySelector(".list-info-desktop");
  let hiddenElement;
  let elementsAcordeon = document.querySelectorAll(".acordeon-item");
  let elementsAcordeonOpciciones = document.querySelectorAll(
    ".opociciones-info-card"
  );
  let elementsAcordeonOpcicionesItems = document.querySelectorAll(
    ".opociciones-info-card-body"
  );
  let categoryItems = document.querySelectorAll(".advantage-item-desktop");
  let itemsTabs = document.querySelectorAll(
    ".container-buttons-tabs-courses a"
  );
  let propietyRoot = document.querySelector(":root");
  const cookieActived = document.cookie;
  let buttonsCookies = document.querySelectorAll(".cookies-buttons a");

  /**
   * Remove container cookies
   */

  function removeCookiesContainer() {
    let cookiesContainer = document.querySelector(".cookies-container");

    if (cookiesContainer) {
      cookiesContainer.remove();
    }
  }

  /*
   Function remove all class items
   --------------------------------------
    @params items array
    @param classItem string
    return @void
 */

  function deleteAllClass(items, classItem) {
    items.forEach((item) => {
      item.classList.remove(classItem);
    });
  }

  /*
   Function Add all class items
   --------------------------------------
    @params items array
    @param classItem string
    return @void
 */

  // Abrir menu mobile
  openMenu.addEventListener("click", () => {
    menuMobile.classList.toggle("actived");
    setTimeout(() => {
      menuMobile.classList.toggle("change-color-menu");
    }, 1000);
  });

  // Open modal info user Desktop

  if (divInfoUser) {
    divInfoUser.addEventListener("click", function (e) {
      containerInfoUser.classList.toggle("d-none");
    });
  }

  /**
   * Effect hover in cards advantage (home)
   */

  categoryItems.forEach((element) => {
    element.addEventListener("mouseenter", function (e) {
      removeClass(categoryItems, "disable");
      removeClass(categoryItems, "hidden");

      this.childNodes[3].classList.remove("disable");
      this.childNodes[1].classList.add("disable");
      this.childNodes[1].classList.add("hidden");
    });
  });

  function removeClass(items, removeClass) {
    items.forEach((element) => {
      element.childNodes[1].classList.remove(removeClass);
    });
  }

  /**
   * Function changer variables root
   */

  function deleteClassActivedTab(item) {
    item.forEach((element) => {
      element.classList.remove("actived");
    });
  }
  function PropertyValueRoot(item, attribute, value) {
    item.style.setProperty(attribute, value);
  }
  function PropertyValueRootLinks(item, value) {
    item.style.setProperty("--widthTabLink", value);
  }

  // Toggle acordeon
  elementsAcordeon.forEach((item) => {
    item.addEventListener("click", function (e) {
      console.log(this);
      //Remove class .show to all elements
      deleteAllClass(elementsAcordeon, "show");
      //Add class element
      this.classList.add("show");
    });
  });

  // Acordeon tab Opociciones
  elementsAcordeonOpciciones.forEach((item) => {
    item.addEventListener("click", function (e) {
      // Remove all class in items
      deleteAllClass(elementsAcordeonOpcicionesItems, "show-tab");
      // Add class item
      this.lastElementChild.classList.add("show-tab");
    });
  });

  /*
   Function Tab
   --------------------------------------
    @params items array
    return @void
 */

  function tabFuncion(items) {
    items.forEach((item) => {
      item.addEventListener("click", function (e) {
        e.preventDefault();
        // Clase del boton del tab
        let items = e.originalTarget.nextSibling.parentElement.classList[0];
        let classItems = `.${items}`;
        let allItems = document.querySelectorAll(classItems);
        deleteAllClass(allItems, "actived");
        e.originalTarget.nextSibling.parentElement.classList.add("actived");

        // Tab content
        let tabContent = document.querySelectorAll(".home-tab-content div");

        deleteAllClass(tabContent, "show");
        // Get id tab
        let docs = document.querySelector(e.explicitOriginalTarget.hash);
        docs.classList.add("show");
      });
    });
  }

  // Tab page home
  let itemsTabHome = document.querySelectorAll(
    ".container-buttons-tabs-courses a"
  );

  /*
   Effect tab desktop
 */

  if (itemsTabHome.length > 0 || !itemsTabHome) {
    PropertyValueRootLinks(propietyRoot, `${itemsTabs[0].clientWidth}px`);
    itemsTabs.forEach((item) => {
      item.addEventListener("click", function (e) {
        e.preventDefault();
        // Clase del boton del tab
        e.preventDefault();
        PropertyValueRoot(propietyRoot, "--widthTab", `${this.offsetLeft}px`);
        PropertyValueRootLinks(propietyRoot, `${this.clientWidth}px`);
        deleteClassActivedTab(itemsTabs);
        deleteAllClass(itemsTabs, "show");
        this.classList.add("actived");
      });
    });

    tabFuncion(itemsTabHome);
  }

  // Tab page metologia
  let itemsTabsMetologia = document.querySelectorAll(
    ".home-buttons-tab-container a"
  );

  if (itemsTabsMetologia.length > 0 || !itemsTabsMetologia) {
    tabFuncion(itemsTabsMetologia);
  }

  /**
   * Close modal details
   */

  let buttonOpenModalDetails = document.getElementById("icon-open-modal-video");
  let buttonCloseModalDetails = document.querySelector(".button-close-modal");
  let modalVideoDetails = document.querySelector(".modal-video");

  if (buttonOpenModalDetails) {
    buttonOpenModalDetails.addEventListener("click", function (e) {
      modalVideoDetails.classList.remove("hidden");
    });
    buttonCloseModalDetails.addEventListener("click", function (e) {
      modalVideoDetails.classList.add("hidden");
    });
  }

  /**
   * Acordion Details
   */

  function deleteClassAcordion(items) {
    items.forEach((element) => {
      element.classList.remove("is-show");
    });
  }

  let acordionDetails = document.querySelectorAll(
    ".course-content-accordion-item"
  );
  let acordionDetailsItems = document.querySelectorAll(
    ".course-content-hidden-accordion"
  );

  acordionDetailsItems[0].classList.add("is-show");
  acordionDetails.forEach((element, ine) => {
    element.addEventListener("click", function (e) {
      deleteClassAcordion(acordionDetailsItems);
      this.lastElementChild.classList.add("is-show");
    });
  });

  // Cookies

  if (cookieActived.match("cookiesCliked=true")) {
    removeCookiesContainer();
  } else {
    if (buttonsCookies) {
      console.log("Existe Cookies");
      buttonsCookies.forEach((element) => {
        element.addEventListener("click", function (e) {
          document.cookie = "cookiesCliked=true";
          removeCookiesContainer();
        });
      });
    }
  }
});
