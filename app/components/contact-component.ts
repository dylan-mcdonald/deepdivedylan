import {Component} from "@angular/core";
import {MailMessage} from "../classes/mail-message";
import {MailResponse} from "../classes/mail-response";
import {MailService} from "../services/mail-service";

@Component({
	templateUrl: "./templates/contact.html"
})

export class ContactComponent {
	constructor(private mailService: MailService) {}

	mailResponse: MailResponse = null;

	sendMail(mailMessage: MailMessage) {
		this.mailService.sendMail(mailMessage)
			.subscribe(
				mailResponse => this.mailResponse = mailResponse
			);
	}
}
