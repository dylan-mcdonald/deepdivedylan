import {Component} from "@angular/core";

@Component({
	selector: "deepdivedylan-app",
	template: require("./app.component.html")
})

export class AppComponent {
	navCollapse = true;

	toggleCollapse() {
		this.navCollapse = !this.navCollapse;
	}
}
