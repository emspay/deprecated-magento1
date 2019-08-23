<?php

class EMS_Pay_Model_Source_ChallengeIndicator
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => EMS_Pay_Model_Config::CHALLENGE_INDICATOR_1,
                'label' => Mage::helper('ems_pay')->__('No preference (You have no preference whether a challenge should be performed. This is the default value)')
            ),
            array(
                'value' => EMS_Pay_Model_Config::CHALLENGE_INDICATOR_2,
                'label' => Mage::helper('ems_pay')->__('No challenge requested (You prefer that no challenge should be performed.)')
            ),
            array(
                'value' => EMS_Pay_Model_Config::CHALLENGE_INDICATOR_3,
                'label' => Mage::helper('ems_pay')->__('Challenge requested: 3DS Requestor Preference (You prefer that a challenge should be performed)')
            ),
            array(
                'value' => EMS_Pay_Model_Config::CHALLENGE_INDICATOR_4,
                'label' => Mage::helper('ems_pay')->__('Challenge requested: Mandate (There are local or regional mandates that mean that a challenge must be performed)')
            )
        );
    }
}
