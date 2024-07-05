<?php

namespace App\Enums;

enum RankEnum: string {
    case FM = '1';
    case Gen = '2';
    case LtGen = '3';
    case MajGen = '4';
    case Brig = '5';
    case Col = '6';
    case LtCol = '7';
    case MajQM = '8';
    case Maj = '9';
    case CaptQM = '10';
    case Capt = '11';
    case LtQM = '12';
    case Lt = '13';
    case Lt2 = '14';
    case OC = '15';
    case WO1 = '16';
    case WO2 = '17';
    case SSgt = '18';
    case Sgt = '19';
    case Cpl = '20';
    case LCpl = '21';
    case Pte = '22';
    case Rec = '23';
    case Mr = '24';
    case Ms = '25';
    case Mrs = '26';
    case Dr = '27';

    public static function getValues(): array {
        return [
            self::FM->value => 'FM',
            self::Gen->value => 'Gen',
            self::LtGen->value => 'Lt Gen',
            self::MajGen->value => 'Maj Gen',
            self::Brig->value => 'Brig',
            self::Col->value => 'Col',
            self::LtCol->value => 'Lt Col',
            self::MajQM->value => 'Maj (QM)',
            self::Maj->value => 'Maj',
            self::CaptQM->value => 'Capt (QM)',
            self::Capt->value => 'Capt',
            self::LtQM->value => 'Lt (QM)',
            self::Lt->value => 'Lt',
            self::Lt2->value => '2/Lt',
            self::OC->value => 'O/C',
            self::WO1->value => 'WO 1',
            self::WO2->value => 'WO 2',
            self::SSgt->value => 'S/Sgt',
            self::Sgt->value => 'Sgt',
            self::Cpl->value => 'Cpl',
            self::LCpl->value => 'L/Cpl',
            self::Pte->value => 'Pte',
            self::Rec->value => 'Rec',
            self::Mr->value => 'Mr',
            self::Ms->value => 'Ms',
            self::Mrs->value => 'Mrs',
            self::Dr->value => 'Dr',
        ];
    }

    public static function getRankName(string $rankId): ?string {
        return self::getValues()[$rankId] ?? null;
    }
}
