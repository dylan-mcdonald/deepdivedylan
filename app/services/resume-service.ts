import {Injectable} from "@angular/core";
import {Headers, Http, Response, RequestOptions} from "@angular/http";
import {Observable} from "rxjs/Observable";
import {BaseService} from "./base-service";

@Injectable()
export class ResumeService extends BaseService {
	constructor(protected http: Http) {
		super(http);
	}

	private resumeUrl = "/jsonresume/";

	getResumeJson() : Observable<any> {
		return(this.http.get(this.resumeUrl)
			.map(this.extractData)
			.catch(this.handleError));
	}
}
