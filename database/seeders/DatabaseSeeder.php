<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Location;
use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Course::insert([
            [
                'slug' => 'career-focused-communication',
                'title' => 'Career-Focused Communication',
                'icon' => 'briefcase',
                'short' => 'Interview answers, workplace presence and presentations that get you noticed.',
                'long' => "A practical programme for working professionals and job seekers. You practise interviews, stakeholder updates, client pitches and everyday workplace conversations until they feel natural.",
                'duration' => '8 weeks · 2 sessions a week',
                'audience' => 'Working professionals & graduates',
                'outcomes' => json_encode([
                    'Structure any answer in under ten seconds',
                    'Speak with a calm, steady voice under pressure',
                    'Deliver crisp updates to senior stakeholders',
                ]),
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'slug' => 'all-rounder-english',
                'title' => 'All-Rounder English',
                'icon' => 'book-open',
                'short' => 'Grammar, vocabulary, fluency and pronunciation in one balanced track.',
                'long' => 'For learners who want the whole picture: reading, writing, listening and speaking built together so progress in one area lifts the others.',
                'duration' => '12 weeks · 3 sessions a week',
                'audience' => 'All levels, ages 15+',
                'outcomes' => json_encode([
                    'Everyday fluency without translating in your head',
                    'A working vocabulary you actually use',
                    'Clear, neutral pronunciation',
                ]),
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'slug' => 'young-author-program',
                'title' => 'Young Author Program',
                'icon' => 'pen-line',
                'short' => 'Guided writing for young learners, ending in a published class anthology.',
                'long' => 'Students plan, draft and edit their own stories with weekly feedback. The course closes with a printed anthology and a public reading.',
                'duration' => '10 weeks · weekend batch',
                'audience' => 'Ages 10-16',
                'outcomes' => json_encode([
                    'Story structure and character craft',
                    'Confident self-editing',
                    'A finished, published piece',
                ]),
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'slug' => 'writers-choice',
                'title' => "Writer's Choice",
                'icon' => 'feather',
                'short' => 'Advanced writing workshop: essays, opinion pieces and long-form narrative.',
                'long' => 'A workshop-style course where you bring your own project and leave with a portfolio-ready body of work, shaped by peer critique and one-to-one edits.',
                'duration' => '8 weeks · 1 long session a week',
                'audience' => 'Ages 16+ and adults',
                'outcomes' => json_encode([
                    'A sharper personal voice',
                    'Editing discipline',
                    'Three polished portfolio pieces',
                ]),
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'slug' => 'young-orator',
                'title' => 'Young Orator',
                'icon' => 'mic',
                'short' => 'Stage confidence, debate and storytelling for school-age speakers.',
                'long' => 'From first-time stage nerves to competitive debate. Students learn breathing, body language, argument building and how to hold a room.',
                'duration' => '12 weeks · weekend batch',
                'audience' => 'Ages 9-17',
                'outcomes' => json_encode([
                    'Stage presence without nerves',
                    'Debate and extempore skills',
                    'Three live performances',
                ]),
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'slug' => 'custom-communication-coaching',
                'title' => 'Custom Communication Coaching',
                'icon' => 'sparkles',
                'short' => 'A programme designed around your goal, timeline and speaking context.',
                'long' => 'Preparing for a keynote, a viva, a funding pitch or a wedding toast? We build the syllabus backwards from your date and rehearse the real thing.',
                'duration' => 'Flexible · 1-to-1',
                'audience' => 'Individuals & teams',
                'outcomes' => json_encode([
                    'A syllabus built for your goal',
                    'Rehearsal in the real setting',
                    'Recorded feedback after each session',
                ]),
                'created_at' => now(), 'updated_at' => now(),
            ],
        ]);

        Testimonial::insert([
            ['name' => 'Ananya Rao', 'role' => 'MBA Student', 'review' => "I used to freeze in group discussions. Eight weeks in, I led my cohort's final presentation and actually enjoyed it.", 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rohit Menon', 'role' => 'IT Professional', 'review' => 'The interview drills were brutally practical. I stopped rambling, started structuring, and cleared three rounds in a row.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sneha Kulkarni', 'role' => 'Senior Manager', 'review' => 'My leadership updates were dense and dull. Now they are short, clear and people remember them. That is the whole difference.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Imran Sheikh', 'role' => 'Startup Founder', 'review' => 'We rehearsed my investor pitch line by line. The feedback was direct and it showed on demo day.', 'created_at' => now(), 'updated_at' => now()],
        ]);

        Post::insert([
            ['slug' => 'structure-beats-confidence', 'title' => 'Structure Beats Confidence', 'excerpt' => 'Confidence is a by-product, not a prerequisite. Learn the three-part frame that makes any answer sound prepared.', 'published_at' => '2026-08-18', 'created_at' => now(), 'updated_at' => now()],
            ['slug' => 'five-minutes-before-you-speak', 'title' => 'The Five Minutes Before You Speak', 'excerpt' => 'A short physical routine that settles your breathing, slows your pace and stops the shaky first sentence.', 'published_at' => '2026-07-30', 'created_at' => now(), 'updated_at' => now()],
            ['slug' => 'how-to-run-a-room', 'title' => 'How to Run a Room, Not Just Present to It', 'excerpt' => 'Eye contact, pausing and question handling: the three habits that turn a talk into a conversation.', 'published_at' => '2026-07-02', 'created_at' => now(), 'updated_at' => now()],
            ['slug' => 'vocabulary-you-actually-use', 'title' => 'Building Vocabulary You Actually Use', 'excerpt' => 'Word lists fade. Here is how to move new words from recognition into everyday speech in two weeks.', 'published_at' => '2026-06-11', 'created_at' => now(), 'updated_at' => now()],
            ['slug' => 'teaching-teens-to-argue-well', 'title' => 'Teaching Teens to Argue Well', 'excerpt' => 'Debate is not about winning. It is the fastest way to teach young speakers to think in public.', 'published_at' => '2026-05-24', 'created_at' => now(), 'updated_at' => now()],
            ['slug' => 'the-pause-is-the-point', 'title' => 'The Pause Is the Point', 'excerpt' => 'Filler words vanish when you get comfortable with silence. A simple drill to practise it.', 'published_at' => '2026-05-05', 'created_at' => now(), 'updated_at' => now()],
        ]);

        Location::insert([
            ['city' => 'Palghar', 'address' => 'Global City, Virar (West), Palghar', 'phone' => '+91-9022321364', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
