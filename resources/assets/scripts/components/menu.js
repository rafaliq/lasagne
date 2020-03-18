const CONFIG = {
  TRIGGER: '[menu-button]',
  ATTR: 'menu-button',
  CLASS: 'menu__button--active',
};

const menu = {
  init() {
    const { TRIGGER } = CONFIG;
    this.triggers = document.querySelectorAll(TRIGGER);
    this.addEvent();
  },

  addEvent() {
    const { ATTR, CLASS } = CONFIG;
    this.triggers.forEach(button => {
      let name = button.getAttribute(ATTR);

      button.addEventListener('click', (event) => {
        let target = event.currentTarget;
        event.preventDefault();
        console.log(name);
        this.triggers.forEach(trigger => {
          trigger.classList.remove(CLASS);
        });
        target.classList.add(CLASS);
      });
    })
  },
};

export default menu;