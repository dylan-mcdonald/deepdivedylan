import {Component, OnInit} from "@angular/core";
import {faBars, faHome} from "@fortawesome/free-solid-svg-icons";
import {MailResponse} from "./shared/classes/mail.response";
import {SessionService} from "./shared/services/session.service";

@Component({
	selector: "deepdivedylan-app",
	template: require("./app.component.html")
})

export class AppComponent implements OnInit {
	faBars = faBars;
	faHome = faHome;
	navCollapse = true;

	response: MailResponse = null;

	constructor(protected sessionService: SessionService) {}

	ngOnInit(): void {
		this.sessionService.setSession()
			.subscribe(response => this.response = response);
	}

	toggleCollapse() {
		this.navCollapse = !this.navCollapse;
	}
}
