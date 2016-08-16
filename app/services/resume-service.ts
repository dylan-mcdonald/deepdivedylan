import {Injectable} from "@angular/core";
import {Http} from "@angular/http";
import {Observable} from "rxjs/Observable";
import {BaseService} from "./base-service";
import {Resume} from "../classes/resume";

@Injectable()
export class ResumeService extends BaseService {
	constructor(protected http: Http) {
		super(http);
	}

	private resumeUrl = "/jsonresume/";

	getResumeJson() : Observable<Resume> {
		return(this.http.get(this.resumeUrl)
			.map(this.extractData)
			.catch(this.handleError));
	}
}
