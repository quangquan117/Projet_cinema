export class Theme {

    themeName;

    constructor() {
        this.themeName = 'theme-dark';
        document.documentElement.className = 'theme-dark';
    }

    changeTheme(button) {
        if (this.themeName === 'theme-dark') {
            this.themeName = 'theme-light';
            document.documentElement.className = 'theme-light';
        } else {
            this.themeName = 'theme-dark';
            document.documentElement.className = 'theme-dark';
        }
    }
}