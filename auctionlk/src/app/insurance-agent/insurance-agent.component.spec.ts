import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { InsuranceAgentComponent } from './insurance-agent.component';

describe('InsuranceAgentComponent', () => {
  let component: InsuranceAgentComponent;
  let fixture: ComponentFixture<InsuranceAgentComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ InsuranceAgentComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(InsuranceAgentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
