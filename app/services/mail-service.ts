import {Injectable} from "@angular/core";
import {Headers, Http, Response, RequestOptions} from "@angular/http";
import {Observable} from "rxjs/Observable";
import {MailMessage} from "../classes/mail-message";
import {MailResponse} from "../classes/mail-response";

@Injectable()
export class MailService {
	constructor(private http: Http) {}

	private mailUrl = "/mail/";

	sendMail(mailMessage: MailMessage): Observable<MailResponse> {
		let body = JSON.stringify(mailMessage);
		let headers = new Headers({ "Content-Type": "application/json" });
		let options = new RequestOptions({ headers: headers });

		return(this.http.post(this.mailUrl, body, options)
			.map(this.extractData)
			.catch(this.handleError));
	}

	private extractData(response: Response){
		if(response.status < 200 || response.status >= 300) {
			throw(new Error("Bad response status: " + response.status))
		}
		return(response.json());
	}

	private handleError(error:any){
		let message = error.message;
		console.log(message);
		return(Observable.throw(message));
	}
}
