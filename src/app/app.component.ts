import {Component} from "@angular/core";
import {faBars, faHome} from "@fortawesome/free-solid-svg-icons";

@Component({
	selector: "deepdivedylan-app",
	template: require("./app.component.html")
})

export class AppComponent {
	faBars = faBars;
	faHome = faHome;
	navCollapse = true;

	toggleCollapse() {
		this.navCollapse = !this.navCollapse;
	}
}
