import {Component} from "@angular/core";
import {MailMessage} from "../shared/classes/mail.message";
import {MailResponse} from "../shared/classes/mail.response";
import {MailService} from "../shared/services/mail.service";
import {faEnvelope, faPaperPlane, faPencilAlt, faUser} from "@fortawesome/free-solid-svg-icons";

@Component({
	template: require("./contact.component.html")
})

export class ContactComponent {
	faEnvelope = faEnvelope;
	faPaperPlane = faPaperPlane;
	faPencilAlt = faPencilAlt;
	faUser = faUser;

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
					this.mailResponse = mailResponse;
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
