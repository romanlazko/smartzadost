<?php

namespace App\Http\Controllers\User\Blanks;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdditionalRequest;
use App\Http\Requests\AddressRequest;
use App\Http\Requests\ApplicationRequest;
use App\Http\Requests\EducationRequest;
use App\Http\Requests\EmploymentAfterArrivalRequest;
use App\Http\Requests\EmploymentBeforeArrivalRequest;
use App\Http\Requests\OccupationRequest;
use App\Http\Requests\PassportRequest;
use App\Http\Requests\PersonalRequest;
use App\Http\Requests\PreviousStayInCzRequest;
use App\Http\Requests\SpouseRequest;
use App\Models\AddressDelivery;
use App\Models\AddressLastResidenceAbroad;
use App\Models\AddressResidence;
use App\Models\GreenBlank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;

class GreenBlankController extends Controller
{
    public function index()
    {
        return view('blanks.green-blank.forms.index');
    }

    public function application()
    {
        $blank = auth()->user()->blank(GreenBlank::class)->get()->last();


        return view('blanks.green-blank.forms.application', compact([
            'blank'
        ]));
    }

    public function saveApplication(ApplicationRequest $request)
    {
        auth()->user()->blank(GreenBlank::class)->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $request->validated()
        );

        return redirect()->route('green-blank.personal');
    }

    public function personal()
    {
        $personal = auth()->user()->personal;

        return view('blanks.green-blank.forms.personal', compact([
            'personal'
        ]));
    }

    public function savePersonal(PersonalRequest $request)
    {
        auth()->user()->personal()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $request->validated()
        );

        return redirect()->route('green-blank.passport');
    }

    public function passport()
    {
        $passport = auth()->user()->passport;

        return view('blanks.green-blank.forms.passport', compact([
            'passport'
        ]));
    }

    public function savePassport(PassportRequest $request)
    {
        auth()->user()->passport()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $request->validated()
        );
        
        return redirect()->route('green-blank.education-occupation');
    }

    public function educationOccupation()
    {
        $education = auth()->user()->education;
        $occupation = auth()->user()->occupation;

        return view('blanks.green-blank.forms.education-occupation', compact([
            'education',
            'occupation'
        ]));
    }

    public function saveEducationOccupation(EducationRequest $education_request, OccupationRequest $occupation_request)
    {
        auth()->user()->education()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $education_request->validated()
        );

        auth()->user()->occupation()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $occupation_request->validated()
        );
        
        return redirect()->route('green-blank.employment-before-arrival');
    }

    public function employmentBeforeArrival()
    {
        $employment_before_arrival = auth()->user()->employment_before_arrival;

        return view('blanks.green-blank.forms.employment-before-arrival', compact([
            'employment_before_arrival'
        ]));
    }

    public function saveEmploymentBeforeArrival(EmploymentBeforeArrivalRequest $request)
    {
        auth()->user()->employment_before_arrival()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $request->validated()
        );
        
        return redirect()->route('green-blank.employment-after-arrival');
    }

    public function employmentAfterArrival()
    {
        $employment_after_arrival = auth()->user()->employment_after_arrival;

        return view('blanks.green-blank.forms.employment-after-arrival', compact([
            'employment_after_arrival'
        ]));
    }

    public function saveEmploymentAfterArrival(EmploymentAfterArrivalRequest $request)
    {
        auth()->user()->employment_after_arrival()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $request->validated()
        );
        
        return redirect()->route('green-blank.last-residence-abroad');
    }

    public function lastResidenceAbroad()
    {
        $last_residence_abroad = auth()->user()->address(AddressLastResidenceAbroad::class)->get()->last();

        return view('blanks.green-blank.forms.last-residence-abroad', compact([
            'last_residence_abroad'
        ]));
    }

    public function saveLastResidenceAbroad(AddressRequest $request)
    {
        auth()->user()->address(AddressLastResidenceAbroad::class)->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $request->validated()
        );
        
        return redirect()->route('green-blank.previous-stay-in-cz');
    }

    public function previousStayInCz()
    {
        $previous_stay_in_cz = auth()->user()->previous_stay_in_cz;

        return view('blanks.green-blank.forms.previous-stay-in-cz', compact([
            'previous_stay_in_cz'
        ]));
    }

    public function savePreviousStayInCz(PreviousStayInCzRequest $request)
    {
        auth()->user()->previous_stay_in_cz()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $request->validated()
        );

        return redirect()->route('green-blank.residence-address');
    }

    public function residenceAddress()
    {
        $residence = auth()->user()->address(AddressResidence::class)->get()->last();

        return view('blanks.green-blank.forms.residence-address', compact([
            'residence'
        ]));
    }

    public function saveResidenceAddress(AddressRequest $request)
    {
        auth()->user()->address(AddressResidence::class)->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $request->validated()
        );

        return redirect()->route('green-blank.delivery-address');
    }

    public function deliveryAddress()
    {
        $delivery = auth()->user()->address(AddressDelivery::class)->get()->last();

        return view('blanks.green-blank.forms.delivery-address', compact([
            'delivery'
        ]));
    }

    public function saveDeliveryAddress(AddressRequest $request)
    {
        auth()->user()->address(AddressDelivery::class)->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $request->validated()
        );
        return redirect()->route('green-blank.spouse');
    }

    public function spouse()
    {
        $spouse = auth()->user()->spouse;

        return view('blanks.green-blank.forms.spouse', compact([
            'spouse',
        ]));
    }

    public function saveSpouse(Request $request)
    {
        $spouse = auth()->user()->spouse()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            Validator::make($request->all(), (new SpouseRequest())->rules())->validated()
        );
        $spouse->passport()->updateOrCreate(
            ['spouse_id' => $spouse->id],
            Validator::make($request->passport, (new PassportRequest())->rules())->validated()
        );
        $spouse->address()->updateOrCreate(
            ['spouse_id' => $spouse->id],
            Validator::make($request->address, (new AddressRequest())->rules())->validated()
        );
        $spouse->occupation()->updateOrCreate(
            ['spouse_id' => $spouse->id],
            Validator::make($request->occupation, (new OccupationRequest())->rules())->validated()
        );
        
        return redirect()->route('green-blank.children');
    }

    public function children()
    {
        $children = auth()->user()->children()->get();
        
        return view('blanks.green-blank.forms.children', compact([
            'children'
        ]));
    }

    public function saveChildren(Request $request)
    {
        foreach ($request->children as $key => $child_data) {
            $child = auth()->user()->children()->updateOrCreate(
                ['id' => auth()->user()->children()?->get()->get($key)?->id],
                Validator::make($child_data, (new PersonalRequest())->rules())->validated()
            );
            $child->passport()->updateOrCreate(
                ['child_id' => $child->id],
                Validator::make($child_data['passport'], (new PassportRequest())->rules())->validated()
            );
            $child->address()->updateOrCreate(
                ['child_id' => $child->id],
                Validator::make($child_data['address'], (new AddressRequest())->rules())->validated()
            );
            $child->occupation()->updateOrCreate(
                ['child_id' => $child->id],
                Validator::make($child_data['occupation'], (new OccupationRequest())->rules())->validated()
            );
        }
        return redirect()->route('green-blank.mother');;
    }

    public function mother()
    {
        $mother = auth()->user()->mother;

        return view('blanks.green-blank.forms.mother', compact([
            'mother'
        ]));
    }

    public function saveMother(Request $request)
    {
        $mother = auth()->user()->mother()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            Validator::make($request->all(), (new PersonalRequest())->rules())->validated()
        );
        $mother->passport()->updateOrCreate(
            ['mother_id' => $mother->id],
            Validator::make($request->passport, (new PassportRequest())->rules())->validated()
        );
        $mother->address()->updateOrCreate(
            ['mother_id' => $mother->id],
            Validator::make($request->address, (new AddressRequest())->rules())->validated()
        );
        $mother->occupation()->updateOrCreate(
            ['mother_id' => $mother->id],
            Validator::make($request->occupation, (new OccupationRequest())->rules())->validated()
        );

        return redirect()->route('green-blank.father');
    }

    public function father()
    {
        $father = auth()->user()->father;

        return view('blanks.green-blank.forms.father', compact([
            'father'
        ]));
    }

    public function saveFather(Request $request)
    {
        $father = auth()->user()->father()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            Validator::make($request->all(), (new PersonalRequest())->rules())->validated()
        );
        $father->passport()->updateOrCreate(
            ['father_id' => $father->id],
            Validator::make($request->passport, (new PassportRequest())->rules())->validated()
        );
        $father->address()->updateOrCreate(
            ['father_id' => $father->id],
            Validator::make($request->address, (new AddressRequest())->rules())->validated()
        );
        $father->occupation()->updateOrCreate(
            ['father_id' => $father->id],
            Validator::make($request->occupation, (new OccupationRequest())->rules())->validated()
        );

        return redirect()->route('green-blank.siblings');
    }

    public function siblings()
    {
        $siblings = auth()->user()->siblings;

        return view('blanks.green-blank.forms.siblings', compact([
            'siblings'
        ]));
    }

    public function saveSiblings(Request $request)
    {
        foreach ($request->siblings as $key => $sibling_data) {
            $sibling = auth()->user()->siblings()->updateOrCreate(
                ['id' => auth()->user()->siblings()?->get()->get($key)?->id], 
                Validator::make($sibling_data, (new PersonalRequest())->rules())->validated()
            );
            $sibling->passport()->updateOrCreate(
                ['sibling_id' => $sibling->id],
                Validator::make($sibling_data['passport'], (new PassportRequest())->rules())->validated()
            );
            $sibling->address()->updateOrCreate(
                ['sibling_id' => $sibling->id],
                Validator::make($sibling_data['address'], (new AddressRequest())->rules())->validated()
            );
            $sibling->occupation()->updateOrCreate(
                ['sibling_id' => $sibling->id],
                Validator::make($sibling_data['occupation'], (new OccupationRequest())->rules())->validated()
            );
        }
        return redirect()->route('green-blank.additional');
    }

    public function additional()
    {
        $additional = auth()->user()->additional;

        return view('blanks.green-blank.forms.additional', compact([
            'additional'
        ]));
    }

    public function saveAdditional(AdditionalRequest $request)
    {
        auth()->user()->additional()->updateOrCreate(
            ['user_id' => auth()->user()->id],
            $request->validated()
        );
        
        return redirect()->route('green-blank.done');
    }

    public function done()
    {
        return view('blanks.green-blank.forms.done');
    }

    public function pdfEmpty()
    {
        $pdf = PDF::loadView('blanks.green-blank.pdf', with([
            'blank' => null,
            'personal' => null,
            'passport' => null,
            'education' => null,
            'occupation' => null,
            'employment_before_arrival' => null,
            'employment_after_arrival' => null,
            'last_residence_abroad' => null,
            'previous_stay_in_cz' => null,
            'residence' => null,
            'delivery' => null,
            'spouse' => null,
            'children' => null,
            'mother' => null,
            'father' => null,
            'siblings' => null,
            'additional' => null,
        ]))->set_option('dpi','80')->setPaper('A4', 'portrait');

        return $pdf->stream('customer-list.pdf', ['Attachment' => 0]);
    }

    public function pdfShow()
    {
        $pdf = PDF::loadView('blanks.green-blank.pdf', with([
            'blank'                             => auth()->user()->blank(GreenBlank::class)->get()->last(),
            'personal'                          => auth()->user()->personal,
            'passport'                          => auth()->user()->passport,
            'education'                         => auth()->user()->education,
            'occupation'                        => auth()->user()->occupation,
            'employment_before_arrival'         => auth()->user()->employment_before_arrival,
            'employment_after_arrival'          => auth()->user()->employment_after_arrival,
            'last_residence_abroad'             => auth()->user()->address(AddressLastResidenceAbroad::class)->get()->last(),
            'previous_stay_in_cz'               => auth()->user()->previous_stay_in_cz,
            'residence'                         => auth()->user()->address(AddressResidence::class)->get()->last(),
            'delivery'                          => auth()->user()->address(AddressDelivery::class)->get()->last(),
            'spouse'                            => auth()->user()->spouse,
            'children'                          => auth()->user()->children,
            'mother'                            => auth()->user()->mother,
            'father'                            => auth()->user()->father,
            'siblings'                          => auth()->user()->siblings,
            'additional'                        => auth()->user()->additional,
        ]))->set_option('dpi','80')->setPaper('A4', 'portrait');

        return $pdf->stream('customer-list.pdf', ['Attachment' => 0]);
    }

    public function pdfDownload()
    {
        $pdf = PDF::loadView('blanks.green-blank.pdf', with([
            'blank'                             => auth()->user()->blank(GreenBlank::class)->get()->last(),
            'personal'                          => auth()->user()->personal,
            'passport'                          => auth()->user()->passport,
            'education'                         => auth()->user()->education,
            'occupation'                        => auth()->user()->occupation,
            'employment_before_arrival'         => auth()->user()->employment_before_arrival,
            'employment_after_arrival'          => auth()->user()->employment_after_arrival,
            'last_residence_abroad'             => auth()->user()->address(AddressLastResidenceAbroad::class)->get()->last(),
            'previous_stay_in_cz'               => auth()->user()->previous_stay_in_cz,
            'residence'                         => auth()->user()->address(AddressResidence::class)->get()->last(),
            'delivery'                          => auth()->user()->address(AddressDelivery::class)->get()->last(),
            'spouse'                            => auth()->user()->spouse,
            'children'                          => auth()->user()->children,
            'mother'                            => auth()->user()->mother,
            'father'                            => auth()->user()->father,
            'siblings'                          => auth()->user()->siblings,
            'additional'                        => auth()->user()->additional,
        ]))->set_option('dpi','80')->setPaper('A4', 'portrait');

        return $pdf->download('customer-list.pdf', ['Attachment' => 0]);
    }

}
