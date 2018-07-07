import {Injectable} from "@angular/core";
import {Headers, Http, Response, RequestOptions} from "@angular/http";
import {Observable} from "rxjs/Observable";
import {BaseService} from "./base-service";
import {MailMessage} from "../classes/mail-message";
import {MailResponse} from "../classes/mail-response";

@Injectable()
export class MailService extends BaseService {
	constructor(protected http: Http) {
		super(http);
	}

	private mailUrl = "/mail/";

	sendMail(mailMessage: MailMessage): Observable<MailResponse> {
		let body = JSON.stringify(mailMessage);
		let headers = new Headers({ "Content-Type": "application/json" });
		let options = new RequestOptions({ headers: headers });

		return(this.http.post(this.mailUrl, body, options)
			.map(this.extractData)
			.catch(this.handleError));
	}
}
