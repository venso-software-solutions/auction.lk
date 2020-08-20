import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AreaAgentFormComponent } from './area-agent-form.component';

describe('AreaAgentFormComponent', () => {
  let component: AreaAgentFormComponent;
  let fixture: ComponentFixture<AreaAgentFormComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AreaAgentFormComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AreaAgentFormComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
