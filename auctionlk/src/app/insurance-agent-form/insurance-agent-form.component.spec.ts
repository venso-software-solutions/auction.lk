import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { InsuranceAgentFormComponent } from './insurance-agent-form.component';

describe('InsuranceAgentFormComponent', () => {
  let component: InsuranceAgentFormComponent;
  let fixture: ComponentFixture<InsuranceAgentFormComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ InsuranceAgentFormComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(InsuranceAgentFormComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
