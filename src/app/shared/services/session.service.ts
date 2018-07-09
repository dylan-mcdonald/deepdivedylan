import {Injectable} from "@angular/core";
import {HttpClient} from "@angular/common/http";
import {MailResponse} from "../classes/mail.response";
import {Observable} from "rxjs";

@Injectable()
export class SessionService {

	constructor(protected http: HttpClient) {}

	private sessionUrl = "api/session/";

	setSession(): Observable<MailResponse> {
		return(this.http.get<MailResponse>(this.sessionUrl));
	}

}