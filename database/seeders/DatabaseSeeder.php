<?php

namespace Database\Seeders;

use App\Models\DonorInquiry;
use App\Models\Event;
use App\Models\GalleryItem;
use App\Models\Post;
use App\Models\Review;
use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Default Administrator
        $admin = User::firstOrCreate(
            ['email' => 'admin@projectcham.org'],
            [
                'name' => 'Project Cham Admin',
                'password' => Hash::make('password'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );

        // 2. Sample Published Blog Posts
        $postsData = [
            [
                'title' => 'When Awareness Becomes Early Action',
                'slug' => 'when-awareness-becomes-early-action',
                'excerpt' => 'What families and communities can do when warning signs appear—and why informed action matters.',
                'content' => '<p>In many communities across Nigeria, childhood cancer is first encountered with confusion, fear, and delay. When families do not recognise early symptoms, treatment is often sought only after disease progression has become advanced.</p><h2>The Critical Importance of Timely Recognition</h2><p>Recognising prolonged fever, unexplained lumps, persistent bone pain, or white spots in the pupil can shorten the diagnostic window by weeks. When healthcare workers and parents are equipped with practical diagnostic checklists, children can be referred to paediatric oncology centres before complications escalate.</p><blockquote>"Timely referral transforms a terrifying diagnosis into a structured journey toward healing."</blockquote><p>Project Cham works directly with grassroots clinics, maternal health units, and community centres to place diagnostic information where parents already seek care.</p>',
                'featured_image' => 'resources/images/marketing/project-cham-impact-awareness.png',
                'status' => 'published',
                'published_at' => now()->subDays(5),
                'read_time_minutes' => 5,
            ],
            [
                'title' => 'What Families Need Between Hospital Visits',
                'slug' => 'what-families-need-between-hospital-visits',
                'excerpt' => 'Structured guidance and community support can help families manage the difficult space between appointments.',
                'content' => '<p>While the hospital ward is where medical treatment occurs, the vast majority of cancer care unfolds in the family home. Between chemotherapy cycles, caregivers manage medication schedules, severe nausea, infection risks, and emotional distress.</p><h2>Building the Bridge of Continuity</h2><p>Without regular contact and follow-up navigators, families often feel abandoned during treatment intervals. Project Cham provides phone support check-ins, transportation coordination, and peer caregiver support circles.</p><blockquote>"Caring for a sick child should never mean feeling completely alone between doctor visits."</blockquote><p>Through our dedicated family support teams, caregivers receive clear instructions, emergency contacts, and practical aid.</p>',
                'featured_image' => 'resources/images/marketing/project-cham-impact-family-support.png',
                'status' => 'published',
                'published_at' => now()->subDays(3),
                'read_time_minutes' => 4,
            ],
            [
                'title' => 'Understanding Childhood Cancer Warning Signs',
                'slug' => 'understanding-childhood-cancer-warning-signs',
                'excerpt' => 'A guide for parents and teachers on subtle symptoms that warrant medical evaluation.',
                'content' => '<p>Childhood cancer can mimic common childhood ailments. Knowing when common symptoms persist beyond normal illness duration is essential for prompt medical screening.</p><h2>Common Warning Indicators</h2><ul><li>Persistent, recurrent unexplained fever</li><li>Unusual swelling or lumps in the neck, abdomen, or pelvis</li><li>Unexplained paleness, bleeding, or bruising</li><li>Frequent headaches accompanied by early morning vomiting</li></ul><p>Consult a qualified paediatrician or community health clinic whenever these symptoms persist without clear cause.</p>',
                'featured_image' => 'resources/images/marketing/project-cham-about-support.png',
                'status' => 'published',
                'published_at' => now()->subDays(2),
                'read_time_minutes' => 3,
            ],
            [
                'title' => 'Building a Stronger Family Support System',
                'slug' => 'building-a-stronger-family-support-system',
                'excerpt' => 'How community volunteers and peer caregivers provide emotional anchors during paediatric cancer therapy.',
                'content' => '<p>The emotional toll of paediatric cancer impacts siblings, parents, and extended families. Creating community safe spaces allows parents to speak openly about distress, share nutritional tips, and regain hope.</p><h2>The Circle of Empathy</h2><p>Our monthly family circles create lifelong friendships and shared resilience. When families realize others have walked the same hospital corridors and emerged victorious, their courage multiplies.</p>',
                'featured_image' => 'resources/images/marketing/project-cham-about-family-support.png',
                'status' => 'published',
                'published_at' => now()->subDays(1),
                'read_time_minutes' => 4,
            ],
            [
                'title' => 'How Partnerships Shorten the Path to Care',
                'slug' => 'how-partnerships-shorten-the-path-to-care',
                'excerpt' => 'Bringing together oncology departments, laboratories, and community aid organizations.',
                'content' => '<p>No single organization can solve paediatric cancer disparities alone. By establishing direct referral pathways between primary health clinics and teaching hospitals, Project Cham eliminates administrative delays for children requiring urgent biopsies.</p>',
                'featured_image' => 'resources/images/marketing/project-cham-get-involved-partner.png',
                'status' => 'published',
                'published_at' => now()->subHours(12),
                'read_time_minutes' => 5,
            ],
            [
                'title' => 'Turning Advocacy Into Measurable Impact',
                'slug' => 'turning-advocacy-into-measurable-impact',
                'excerpt' => 'From public education to policy engagement: making paediatric cancer care accessible across Nigeria.',
                'content' => '<p>Advocacy is not just raising awareness; it is measuring real diagnostic improvements, subsidy approvals, and survival rates. Learn how Project Cham partners with healthcare leaders to shape tangible change.</p>',
                'featured_image' => 'resources/images/marketing/project-cham-get-involved-advocate.png',
                'status' => 'published',
                'published_at' => now()->subHours(4),
                'read_time_minutes' => 4,
            ],
        ];

        foreach ($postsData as $p) {
            Post::firstOrCreate(
                ['slug' => $p['slug']],
                array_merge($p, ['user_id' => $admin->id])
            );
        }

        // 3. Sample Events
        $eventsData = [
            [
                'title' => 'Childhood Cancer Awareness Session',
                'slug' => 'childhood-cancer-awareness-session',
                'description' => 'A community awareness conversation guiding families and caregivers on early diagnostic warning signs and clinical access pathways.',
                'event_date' => now()->addDays(10)->setTime(10, 0),
                'location' => 'Lagos, Nigeria',
                'category' => 'Awareness Session',
                'image' => 'resources/images/marketing/project-cham-impact-awareness.png',
                'image_position' => 'center',
                'action_label' => 'View event',
                'is_active' => true,
            ],
            [
                'title' => 'Family Support Circle',
                'slug' => 'family-support-circle',
                'description' => 'A supportive gathering for parents and children currently undergoing cancer treatment, featuring creative arts, peer conversations, and counseling.',
                'event_date' => now()->addDays(15)->setTime(12, 30),
                'location' => 'Ikeja, Lagos',
                'category' => 'Family Support',
                'image' => 'resources/images/marketing/project-cham-get-involved-support-child.png',
                'image_position' => 'center',
                'action_label' => 'Join Circle',
                'is_active' => true,
            ],
            [
                'title' => 'Care Access Partner Clinic',
                'slug' => 'care-access-partner-clinic',
                'description' => 'A joint clinic outreach with paediatric healthcare partners offering free preliminary screenings and oncology navigator consultations.',
                'event_date' => now()->addDays(22)->setTime(9, 0),
                'location' => 'Surulere, Lagos',
                'category' => 'Partner Clinic',
                'image' => 'resources/images/marketing/project-cham-impact-care-access.png',
                'image_position' => 'center',
                'action_label' => 'View clinic',
                'is_active' => true,
            ],
            [
                'title' => 'Community Advocacy Workshop',
                'slug' => 'community-advocacy-workshop',
                'description' => 'Youth and community advocates meet to develop grassroots awareness strategies and healthcare navigation tools for local families.',
                'event_date' => now()->addDays(29)->setTime(14, 0),
                'location' => 'Lagos, Nigeria',
                'category' => 'Advocacy Workshop',
                'image' => 'resources/images/marketing/project-cham-get-involved-advocate.png',
                'image_position' => 'center 42%',
                'action_label' => 'Participate',
                'is_active' => true,
            ],
        ];

        foreach ($eventsData as $e) {
            Event::firstOrCreate(['slug' => $e['slug']], $e);
        }

        // 4. Sample Team Members
        $teamData = [
            [
                'name' => 'Amara Okafor',
                'slug' => 'amara-okafor',
                'role' => 'Child & Family Support Lead',
                'specialty' => 'Pediatric Nursing & Caregiver Navigation',
                'email' => 'amara.okafor@projectcham.org',
                'linkedin_url' => 'https://linkedin.com/in/amara-okafor',
                'twitter_url' => 'https://x.com/amara_cham',
                'bio' => 'Experienced paediatric nurse and family coordinator dedicated to supporting children and their caregivers throughout every phase of oncology treatment.',
                'quote' => 'No family should have to balance the emotional shock of childhood cancer with the terror of navigational confusion.',
                'order' => 1,
                'is_active' => true,
                'image_position' => '0%',
            ],
            [
                'name' => 'Tunde Balogun',
                'slug' => 'tunde-balogun',
                'role' => 'Healthcare Partnerships Lead',
                'specialty' => 'Clinical Networks & Hospital Subsidies',
                'email' => 'tunde.balogun@projectcham.org',
                'linkedin_url' => 'https://linkedin.com/in/tunde-balogun',
                'twitter_url' => 'https://x.com/tunde_cham',
                'bio' => 'Liaises with teaching hospitals, oncology centers, and diagnostic laboratories to create subsidized clinical care pathways.',
                'quote' => 'By aligning hospitals and philanthropic subsidies, we turn impossible treatment bills into accessible cures.',
                'order' => 2,
                'is_active' => true,
                'image_position' => '33.333%',
            ],
            [
                'name' => 'Zainab Musa',
                'slug' => 'zainab-musa',
                'role' => 'Advocacy & Awareness Lead',
                'specialty' => 'Public Health Education & Policy',
                'email' => 'zainab.musa@projectcham.org',
                'linkedin_url' => 'https://linkedin.com/in/zainab-musa',
                'twitter_url' => 'https://x.com/zainab_cham',
                'bio' => 'Leads grassroots community campaigns, school outreaches, and public education to eliminate stigma and promote early cancer detection.',
                'quote' => 'Early detection turns fatal prognoses into survival stories. Education is our first medical shield.',
                'order' => 3,
                'is_active' => true,
                'image_position' => '66.667%',
            ],
            [
                'name' => 'Chidi Nwosu',
                'slug' => 'chidi-nwosu',
                'role' => 'Community Outreach Coordinator',
                'specialty' => 'Volunteer Mobilization & Family Logistics',
                'email' => 'chidi.nwosu@projectcham.org',
                'linkedin_url' => 'https://linkedin.com/in/chidi-nwosu',
                'twitter_url' => 'https://x.com/chidi_cham',
                'bio' => 'Coordinates volunteer circles, family logistics aid, hospital visitations, and caregiver care packages across Lagos and surrounding areas.',
                'quote' => 'Community care is showing up consistently at the bedside with warmth, sustenance, and tangible companionship.',
                'order' => 4,
                'is_active' => true,
                'image_position' => '100%',
            ],
            [
                'name' => 'Dr. Folake Adeyemi, MD',
                'slug' => 'dr-folake-adeyemi',
                'role' => 'Clinical Oncology Advisor',
                'specialty' => 'Consultant Paediatric Oncology',
                'email' => 'dr.adeyemi@projectcham.org',
                'linkedin_url' => 'https://linkedin.com/in/dr-folake-adeyemi',
                'twitter_url' => 'https://x.com/dr_adeyemi',
                'bio' => 'Consultant Paediatric Oncologist advising Project Cham on patient triage, hospital subsidy protocols, and evidence-based clinical partnerships.',
                'quote' => 'Evidence-based protocols combined with compassionate financial support can bring survival parity to Nigerian children.',
                'order' => 5,
                'is_active' => true,
                'image_position' => 'center',
            ],
            [
                'name' => 'Ngozi Eze',
                'slug' => 'ngozi-eze',
                'role' => 'Child Psychology & Trauma Specialist',
                'specialty' => 'Pediatric Mental Health & Expressive Art Therapy',
                'email' => 'ngozi.eze@projectcham.org',
                'linkedin_url' => 'https://linkedin.com/in/ngozi-eze',
                'twitter_url' => 'https://x.com/ngozi_cham',
                'bio' => 'Clinical psychologist providing counseling, expressive art therapy, and emotional resilience support for children undergoing treatment and their siblings.',
                'quote' => 'Helping a child paint, smile, and express fear during chemotherapy protects their spirit as medicine heals their body.',
                'order' => 6,
                'is_active' => true,
                'image_position' => 'center',
            ],
            [
                'name' => 'Babajide Adeleke',
                'slug' => 'babajide-adeleke',
                'role' => 'Patient Navigation & Logistics Officer',
                'specialty' => 'Emergency Transport & Lodging Aid',
                'email' => 'babajide.adeleke@projectcham.org',
                'linkedin_url' => 'https://linkedin.com/in/babajide-adeleke',
                'twitter_url' => 'https://x.com/babajide_cham',
                'bio' => 'Ensures emergency patient transit, timely hospital appointments, and lodging support for rural families traveling to metropolitan treatment centers.',
                'quote' => 'Distance from a treatment center should never determine whether a child lives or dies.',
                'order' => 7,
                'is_active' => true,
                'image_position' => 'center',
            ],
            [
                'name' => 'Dr. Halima Bello',
                'slug' => 'dr-halima-bello',
                'role' => 'Nutrition & Supportive Care Lead',
                'specialty' => 'Clinical Oncology Nutrition & Recovery',
                'email' => 'dr.bello@projectcham.org',
                'linkedin_url' => 'https://linkedin.com/in/dr-halima-bello',
                'twitter_url' => 'https://x.com/dr_bello',
                'bio' => 'Pediatric clinical nutritionist formulating specialized dietary recovery plans to manage the physical toll of aggressive chemotherapy in children.',
                'quote' => 'Nutritional stamina is vital for completing chemotherapy regimens safely without premature treatment interruption.',
                'order' => 8,
                'is_active' => true,
                'image_position' => 'center',
            ],
        ];

        foreach ($teamData as $t) {
            TeamMember::updateOrCreate(['name' => $t['name']], $t);
        }

        // 5. Sample Gallery Items (5-item editorial bento set)
        $galleryData = [
            [
                'title' => 'Room to learn, laugh, and still feel like a child',
                'eyebrow' => 'Child & family support',
                'caption' => 'A child enjoying a creative drawing session during treatment support.',
                'alt_text' => 'A Black child enjoying a creative support session with her family and a Project Cham volunteer',
                'image' => 'resources/images/marketing/project-cham-get-involved-support-child.png',
                'order' => 1,
                'layout_span' => 'featured_large',
                'is_active' => true,
                'image_position' => 'center 46%',
            ],
            [
                'title' => 'Knowledge shared before care is urgent',
                'eyebrow' => 'Awareness & advocacy',
                'caption' => 'A community awareness meeting discussing early symptoms of childhood cancer.',
                'alt_text' => 'A Project Cham educator leading a childhood cancer awareness conversation with families',
                'image' => 'resources/images/marketing/project-cham-impact-awareness.png',
                'order' => 2,
                'layout_span' => 'standard',
                'is_active' => true,
                'image_position' => 'center 45%',
            ],
            [
                'title' => 'A clearer way into care',
                'eyebrow' => 'Access to care',
                'caption' => 'Patient navigator welcoming a mother and child at the hospital entrance.',
                'alt_text' => 'A mother and child being welcomed by a healthcare professional',
                'image' => 'resources/images/marketing/project-cham-impact-care-access.png',
                'order' => 3,
                'layout_span' => 'compact',
                'is_active' => true,
                'image_position' => 'center 48%',
            ],
            [
                'title' => 'Care teams moving as one',
                'eyebrow' => 'Partnerships',
                'caption' => 'Oncologists and community organizers coordinating clinical referrals.',
                'alt_text' => 'Healthcare and community partners planning coordinated support together',
                'image' => 'resources/images/marketing/project-cham-get-involved-partner.png',
                'order' => 4,
                'layout_span' => 'compact',
                'is_active' => true,
                'image_position' => 'center 44%',
            ],
            [
                'title' => 'Support that continues between appointments',
                'eyebrow' => 'Family support',
                'caption' => 'Practical caregiver guidance provided at home between therapy sessions.',
                'alt_text' => 'A Black child drawing with a caregiver and a family support professional',
                'image' => 'resources/images/marketing/project-cham-impact-family-support.png',
                'order' => 5,
                'layout_span' => 'standard',
                'is_active' => true,
                'image_position' => 'center 48%',
            ],
        ];

        foreach ($galleryData as $g) {
            GalleryItem::firstOrCreate(['title' => $g['title']], $g);
        }

        // 6. Sample Donor Inquiries for the CRM
        $inquiriesData = [
            [
                'name' => 'Folake Adeyemi',
                'email' => 'folake.adeyemi@example.com',
                'phone' => '+234 803 111 2233',
                'involvement_type' => 'support_child',
                'pledge_amount' => '₦50,000 / month',
                'frequency' => 'monthly',
                'message' => 'I would like to sponsor medication and chemotherapy support for one child in paediatric care.',
                'status' => 'new',
            ],
            [
                'name' => 'David Okoro',
                'email' => 'david.okoro@example.com',
                'phone' => '+234 802 444 5566',
                'involvement_type' => 'general_donation',
                'pledge_amount' => '₦150,000',
                'frequency' => 'one_time',
                'message' => 'Please direct this contribution to emergency diagnostic biopsy funding for newly referred patients.',
                'status' => 'contacted',
                'admin_notes' => 'Reached out via phone on 2nd Sept. Shared official bank details and hospital accountability brochure.',
                'contacted_at' => now()->subDay(),
            ],
            [
                'name' => 'Dr. Kemi Balogun (Care Partners Ltd)',
                'email' => 'kemi@carepartners.ng',
                'phone' => '+234 809 777 8899',
                'involvement_type' => 'partner',
                'pledge_amount' => 'Partnership',
                'frequency' => 'annual',
                'message' => 'Our clinical lab is interested in subsidizing blood count and histology tests for Project Cham referrals.',
                'status' => 'in_progress',
                'admin_notes' => 'Zoom meeting scheduled for Friday 11am with Healthcare Partnerships Lead.',
                'contacted_at' => now()->subDays(2),
            ],
        ];

        foreach ($inquiriesData as $inq) {
            DonorInquiry::firstOrCreate(['email' => $inq['email']], $inq);
        }

        // 7. Sample Reviews & Testimonials
        $reviewsData = [
            [
                'author_name' => 'A Project Cham family',
                'role' => 'Family Care Recipient',
                'content' => 'Having one place to ask questions and understand the next step made the journey feel less overwhelming. Consistent support gave our family room to focus on our child.',
                'meta' => 'Identity protected',
                'initials' => 'PC',
                'rating' => 5,
                'order' => 1,
                'is_active' => true,
            ],
            [
                'author_name' => 'A supported caregiver',
                'role' => 'Caregiver & Mother',
                'content' => 'The support did not end after one conversation. We were guided, checked on, and connected to people who could help when our family needed it most.',
                'meta' => 'Identity protected',
                'initials' => 'SC',
                'rating' => 5,
                'order' => 2,
                'is_active' => true,
            ],
            [
                'author_name' => 'Mrs. Ngozi E.',
                'role' => 'Parent of 6-year-old in remission',
                'content' => 'Project Cham helped coordinate our diagnostic tests and stood by us through every cycle of treatment. Their presence turned despair into practical progress.',
                'meta' => 'Lagos, Nigeria',
                'initials' => 'NE',
                'rating' => 5,
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($reviewsData as $rev) {
            Review::firstOrCreate(['author_name' => $rev['author_name']], $rev);
        }
    }
}
