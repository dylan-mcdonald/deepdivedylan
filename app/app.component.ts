import {Component} from "@angular/core"
import {NgClass} from "@angular/common";
import {ROUTER_DIRECTIVES} from "@angular/router";
import {HTTP_PROVIDERS} from "@angular/http";

@Component({
	selector: 'deepdivedylan-app',
	templateUrl: './templates/deepdivedylan-app.html',
	directives: [NgClass, ROUTER_DIRECTIVES],
	providers: [HTTP_PROVIDERS]
})

export class AppComponent {
	navCollapse = true;

	toggleCollapse() {
		this.navCollapse = !this.navCollapse;
	}
}
