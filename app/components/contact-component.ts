import {Component} from "@angular/core";
import {MailMessage} from "../classes/mail-message";
import {MailResponse} from "../classes/mail-response";
import {MailService} from "../services/mail-service";

@Component({
	templateUrl: "./templates/contact.html"
})

export class ContactComponent {
	constructor(private mailService: MailService) {}

	alertClass: string = "";
	mailMessage: MailMessage = new MailMessage("", "", "", "", "");
	mailResponse: MailResponse = null;

	handleCorrectCaptcha(recaptchaResponse: string) {
		this.mailMessage.recaptcha = recaptchaResponse;
	}

	sendMail(mailMessage: MailMessage) {
		this.mailService.sendMail(mailMessage)
			.subscribe(
				mailResponse => {
					this.mailResponse = mailResponse
					this.alertClass = this.resetFormOnSuccess()
				}
			);
	}

	resetFormOnSuccess() {
		if(this.mailResponse.status !== 200) {
			return("alert-danger");
		} else {
			this.mailMessage = new MailMessage("", "", "", "", "");
			return("alert-success");
		}
	}
}
