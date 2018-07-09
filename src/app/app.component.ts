import {Component} from "@angular/core";
import {faBars} from "@fortawesome/free-solid-svg-icons";

@Component({
	selector: "deepdivedylan-app",
	template: require("./app.component.html")
})

export class AppComponent {
	faBars = faBars;
	navCollapse = true;

	toggleCollapse() {
		this.navCollapse = !this.navCollapse;
	}
}
