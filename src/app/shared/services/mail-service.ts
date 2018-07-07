import {Injectable} from "@angular/core";
import {HttpClient} from "@angular/common/http";
import {Observable} from "rxjs";
import {MailMessage} from "../classes/mail.message";
import {MailResponse} from "../classes/mail.response";

@Injectable()
export class MailService {
	constructor(protected http: HttpClient) {}

	private mailUrl = "/api/mail/";

	sendMail(mailMessage: MailMessage): Observable<MailResponse> {
		return(this.http.post<MailResponse>(this.mailUrl, mailMessage));
	}
}
